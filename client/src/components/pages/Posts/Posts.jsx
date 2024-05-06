import React, { useEffect, useState } from 'react';
import axios from "axios";
const Posts = () => {
    const [posts, setPosts]=useState([])
    useEffect(()=>{
        let url=`${process.env.REACT_APP_API_URL}/posts`
        axios.get(url).then((res)=>{
           setPosts(res.data)
        })
    },[])
    console.log("Posts", posts);
    return (
        <div className='w-4/5 py-10 m-auto flex justify-between align-middle flex-wrap gap-10'>
            {
              posts.map((post)=>{
                    return (
                        <div key={post.id} className='card p-3 w-[330px] shadow-lg rounded-lg text-left flex flex-col gap-5'>
                            <img src="https://placehold.co/500x500" alt="demo" />
                           <h2 className='text-lg font-bold'>{post.title.rendered}</h2>
                           <p dangerouslySetInnerHTML={{ __html: post.excerpt.rendered}}></p>
                        </div>
                    )
              })
            }
        </div>
    );
};

export default Posts;