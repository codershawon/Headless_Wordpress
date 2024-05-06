import './App.css';
import Home from './components/pages/Home/Home';
import Posts from './components/pages/Posts/Posts';
import {Routes, Route } from 'react-router-dom';

function App() {
  return (
    <div className="App">
       <Routes>
        <Route path='/' element={<Home/>}/>
        <Route path='/posts' element={<Posts/>}/>
       </Routes>
    </div>
  );
}

export default App;
