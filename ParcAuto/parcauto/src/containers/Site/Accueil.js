import React, { Component } from "react"; 
import TitleH1 from "../../components/UI/TitleH1";
import logo from "../../assets/images/logo.png";

class Accueil extends Component { 
     render() { 
         return (
             <div>
                <TitleH1>Accueil</TitleH1>
                <div className="container">
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Repellendus facere mollitia veniam earum suscipit vel omnis officia? Possimus quis et, 
                    labore enim perferendis veniam inventore dicta? Quaerat quasi error eaque?
                    </p>
                    <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Repellendus facere mollitia veniam earum suscipit vel omnis officia? Possimus quis et, 
                    labore enim perferendis veniam inventore dicta? Quaerat quasi error eaque?
                    </p>
                    <div className="row no-gutters align-items-center">
                        <div className="col-12 col-md-6">
                            <img src={logo} alt="logo" className="img-flui" />
                        </div>
                        <div className="col-12 col-md-6">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Repellendus facere mollitia veniam earum suscipit vel omnis officia? Possimus quis et, 
                            labore enim perferendis veniam inventore dicta? Quaerat quasi error eaque?
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Repellendus facere mollitia veniam earum suscipit vel omnis officia? Possimus quis et, 
                            labore enim perferendis veniam inventore dicta? Quaerat quasi error eaque?
                        </div>
                        <div className="col-12 col-md-6">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Repellendus facere mollitia veniam earum suscipit vel omnis officia? Possimus quis et, 
                            labore enim perferendis veniam inventore dicta? Quaerat quasi error eaque?
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Repellendus facere mollitia veniam earum suscipit vel omnis officia? Possimus quis et, 
                            labore enim perferendis veniam inventore dicta? Quaerat quasi error eaque?
                        </div>
                        <div className="col-12 col-md-6">
                            <img src={logo} alt="logo" className="img-flui" />
                        </div>
                    </div>
                </div>
             </div>
             
        );
    }
} 

export default Accueil;