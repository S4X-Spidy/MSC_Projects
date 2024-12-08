import logo from './logo.svg';
import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import Human from './Human';
import Computer from './Computer';
import { Banner } from "./Banner";
import { BrowserRouter as Router, Link, Route, Routes, Outlet } from 'react-router-dom';

function App() {
  return (
    <div className="App">
       <Router>
        <Routes>
          <Route exact path="/" element={<Banner />} />
          <Route path="/Human" element={<Human/>} />
          <Route path="/Computer" element={<Computer/>} />
        </Routes> 
        

       </Router>
      
    </div>
  );
}

export default App;
