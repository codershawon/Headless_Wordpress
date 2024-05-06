import React from 'react';
import {Routes, Route } from 'react-router-dom';
import Home from './Home/Home';
import Posts from './Posts/Posts';
import Navbar from '../common/Navbar/Navbar';
const Pages = () => {
    return (
       <>
       <Navbar/>
        <Routes>
            <Route path='/' element={<Home/>}/>
            <Route path='/posts' element={<Posts/>}/>
       </Routes>
       </>
    );
};

export default Pages;