import { useState, useEffect } from "react";
import { Container, Row, Col } from "react-bootstrap";
import tic from "./assets/img/tic.png";
import { ArrowRightCircle } from 'react-bootstrap-icons';
import 'animate.css';
import TrackVisibility from 'react-on-screen';
import './css/style.css';
import { BrowserRouter as Router, Link, Route, Routes, Outlet } from 'react-router-dom';

export const Banner = () => {
  


  return (
    <section className="banner" id="home">
      <Container>
        <Row className="align-items-center">
          <Col xs={12} md={6} xl={7}>
            <TrackVisibility>
              {({ isVisible }) =>
              <div className={isVisible ? "animate__animated animate__fadeIn" : ""}>
                <span className="tagline">Welcome to the game of TicTacToe</span>
                <h1>{`What is the Game TicTacToe?`}</h1>
                  <p>Tic-tac-toe or Xs and Os  is a paper-and-pencil game for two players who take turns marking the spaces in a three-by-three grid with X or O. The player who succeeds in placing three of their marks in a horizontal, vertical, or diagonal row is the winner. It is a solved game, with a forced draw assuming best play from both players.</p>
                 
                  <div className="button-group button">
                   <Link to={`/Human`}> <button  className="btn btn-primary">vs Human</button></Link>
                  <Link to={`/Computer`}> <button  className="btn btn-primary">vs AI</button></Link>
                     
                     {/* <button onClick={() => console.log('vs human')} className="btn btn-primary">vs Human</button>
                     <button onClick={() => console.log('vs ai')} className="btn btn-primary">vs AI</button> */}
                  </div>
              </div>}
            </TrackVisibility>
          </Col>
          <Col xs={12} md={6} xl={5}>
            <TrackVisibility>
              {({ isVisible }) =>
                <div className={isVisible ? "animate__animated animate__zoomIn" : ""}>
                  <img src={tic} alt="Header Img"/>
                </div>}
            </TrackVisibility>
          </Col>
        </Row>
      </Container>
    </section>
  )
}
