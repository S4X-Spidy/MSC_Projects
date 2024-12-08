import React, { useState, useEffect } from 'react';
import './css/comp.css';
import Info from "./info.js";
import { BrowserRouter as Router, Link, Route, Routes, Outlet } from 'react-router-dom';


const BOARD_SIZE = 3;

const PLAYER_HUMAN = 'X';
const PLAYER_AI = 'O';
const EMPTY_CELL = '';

const WINNING_COMBINATIONS = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6],
];

  

const Computer = () => {
    const [board, setBoard] = useState(Array(9).fill(EMPTY_CELL));
    const [currentPlayer, setCurrentPlayer] = useState(PLAYER_AI);
    const [winner, setWinner] = useState(null);

    useEffect(() => {
        if (!winner && currentPlayer === PLAYER_AI) {
          setTimeout(() => {
            makeAIMove();
          }, 500);
        }
    }, [board, currentPlayer, winner]);
    

    useEffect(()=>{
        checkpmtWinner(board);
    },[board]);

    const handleClick = (index) => {
        if (!board[index] && !winner) {
          const newBoard = [...board];
          newBoard[index] = currentPlayer;
          setBoard(newBoard);
          checkWinner(newBoard, currentPlayer);
          setCurrentPlayer(currentPlayer === PLAYER_HUMAN ? PLAYER_AI : PLAYER_HUMAN);
        }
      };


      const checkpmtWinner = (board) => {
        for (let i = 0; i < WINNING_COMBINATIONS.length; i++) {
          const [a, b, c] = WINNING_COMBINATIONS[i];
          if (board[a] === PLAYER_AI && board[b] === PLAYER_AI && board[c] === PLAYER_AI) {
            setWinner(PLAYER_AI);
            return PLAYER_AI;
          }

          if (board[a] === PLAYER_HUMAN && board[b] === PLAYER_HUMAN && board[c] === PLAYER_HUMAN) {
            setWinner(PLAYER_HUMAN);
            return PLAYER_HUMAN;
          }

          
        }
        if (board.every(cell => cell !== EMPTY_CELL)) {
          setWinner('draw');
          return 'draw';
        }

        return '';
      };

      const checkWinner = (board) => {
        for (let i = 0; i < WINNING_COMBINATIONS.length; i++) {
          const [a, b, c] = WINNING_COMBINATIONS[i];
          if (board[a] === PLAYER_AI && board[b] === PLAYER_AI && board[c] === PLAYER_AI) {
            
            return PLAYER_AI;
          }

          if (board[a] === PLAYER_HUMAN && board[b] === PLAYER_HUMAN && board[c] === PLAYER_HUMAN) {
            
            return PLAYER_HUMAN;
          }

          
        }
        if (board.every(cell => cell !== EMPTY_CELL)) {
          
          return 'draw';
        }

        return '';
      };

      const resetGame = () => {
        setBoard(Array(9).fill(EMPTY_CELL));
        setCurrentPlayer(PLAYER_AI);
        setWinner(null);
      };


  const makeAIMove = () => {
    const bestMove = getBestMove(board, PLAYER_AI);
    const newBoard = [...board];
    newBoard[bestMove.index] = PLAYER_AI;
    setBoard(newBoard);
    checkWinner(newBoard, PLAYER_AI);
    setCurrentPlayer(PLAYER_HUMAN);
  };

  const getBestMove = (board, player) => {
    let bestMove = { score: player === PLAYER_AI ? -Infinity : Infinity, index: null };

    for (let i = 0; i < board.length; i++) {
      if (board[i] === EMPTY_CELL) {
        const newBoard = [...board];
        newBoard[i] = player;
        const score = minimax(newBoard, 0, false);
        console.log(score);
        if ((player === PLAYER_AI && score > bestMove.score) || (player === PLAYER_HUMAN && score < bestMove.score)) {
          bestMove.score = score;
          bestMove.index = i;
        }
      }
    }

    return bestMove;
  };

  function minimax(board, depth, isMaximizing) {
   
    const result = checkWinner(board);
    
    
      if (result === PLAYER_AI) {
        return 10 - depth;
      } else if (result === PLAYER_HUMAN) {
        return depth - 10;
      } else if(result === 'draw') {
        return 0;
      }
      
    

    
    if (isMaximizing) {
      let bestScore = -Infinity;
      for (let i = 0; i < board.length; i++) {
        if (board[i] === EMPTY_CELL) {
          const newBoard = [...board];
          newBoard[i] = PLAYER_AI;
          const score = minimax(newBoard, depth + 1, false);
          bestScore = Math.max(score, bestScore);
        }
      }
      return bestScore;
    } else {
      let bestScore = Infinity;
      for (let i = 0; i < board.length; i++) {
        if (board[i] === EMPTY_CELL) {
          const newBoard = [...board];
          newBoard[i] = PLAYER_HUMAN;
          const score = minimax(newBoard, depth + 1, true);
          bestScore = Math.min(score, bestScore);
        }
      }
      return bestScore;
    }

    console.log("xxx");
  }

  let scores = {
    'X': 1,
    'O': -1,
    'Tie': 0
  };


  const renderCell = (index) => (
    <div className="mycol">
    <button
      className="cell"
      onClick={() => handleClick(index)}
    >
      {board[index]}
    </button>
    </div>
  );

  return (
    <div>
      
    <div>
    <Link to={`/`}> <button className="btn btn-primary" style={{marginRight: 80 + 'em'}}>Back</button></Link>
    </div>
    <div style={{marginLeft: 25  + 'em'}}>

      <h1>Human (X) VS Computer (O)</h1>
      <div className="board">
        {board.map((cell, index) => renderCell(index))}
      </div>
      {winner && (
        <div className="winner">
          {winner === 'Tie' ? 'It\'s a Tie!' : `Winner: ${winner}`}
          <button onClick={resetGame}>Reset Game</button>
        </div>
      )}
      <Info />
    </div>
    </div>
  );
};

export default Computer;
