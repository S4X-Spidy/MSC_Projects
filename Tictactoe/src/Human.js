import Board from "./board.js";
import Info from "./info.js";
import "./css/Human.css";
import { useState } from "react";
import { BrowserRouter as Router, Link, Route, Routes, Outlet } from 'react-router-dom';

function Human() {

	const [reset, setReset] = useState(false);


	const [winner, setWinner] = useState("");


	const resetBoard = () => {
		setReset(true);
	};

	return (
		<div className="App" >
			
			<Link to={`/`}> <button className="btn btn-primary" style={{marginRight: 80 + 'em'}}>Back</button></Link>
			
			<h1>Human VS Human</h1>
			{/* Shrinks the popup when there is no winner */}
			<div className={`winner ${winner !== "" ? "" : "shrink"}`}>
				{/* Display the current winner */}
				<div className="winner-text">{winner}</div>
				{/* Button used to reset the board */}
				<button onClick={() => resetBoard()}>
					Reset Board
				</button>
			</div>
			{/* Custom made board component comprising of 
			the tic-tac-toe board */}
			<Board
				reset={reset}
				setReset={setReset}
				winner={winner}
				setWinner={setWinner}
			/>
			<Info />
		</div>
	);
}

export default Human;
