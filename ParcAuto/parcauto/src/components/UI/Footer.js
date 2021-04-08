import React from "react"; 
import facebook from "../../assets/images/footer/fb.png";
import twitter from "../../assets/images/footer/twitter.png";
import youtube from "../../assets/images/footer/youtube.png";
import {NavLink} from "react-router-dom";

const footer = (props) => ( 
    <>
        <footer className="bg-success">
            <div className="text-white text-center">
                ParcAuto - Tout droits reservés
            </div>
            <div className="row no-gutters align-items-center text-center pt-2">
            <div className="col-3">
                <a href="www.facebook.com" className="d-block" target="_blank">
                <img src={facebook} alt="facebook" className="imgFB"/>
                </a>
               
            </div>
            <div className="col-3">
                <a href="www.twitter.com" className="d-block" target="_blank">
                <img src={twitter} alt="twitter" className="imgTW"/>
                </a>
                
            </div>
            <div className="col-3">
                <a href="www.youtube.com" className="d-block" target="_blank">
                <img src={youtube} alt="youtube" className="imgYB"/>
                </a>  
            </div>
            <div className="col-3">
                <NavLink to="" className="nav-link p-0 m-0"> Mentions Legales</NavLink>
            </div>
            </div>
        </footer>
    </> 
); 

export default footer;