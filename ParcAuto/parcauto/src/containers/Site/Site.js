import React, { Component } from "react";
import Navbar from "./../../components/UI/NavBar";
import {Switch, Route} from "react-router-dom";
import Acceuil from "./Accueil";
import Contact from "./Contact";
import Error from "../../components/UI/Error"
import Footer from "../../components/UI/Footer";

class Site extends Component {
    render() {
        return (
           <>
                <div className="site">
                    <Navbar />
                    <Switch>
                        <Route path="/contact" exact render={() => <Contact />} />
                        <Route path="/" exact render={() => <Acceuil />} />    
                        <Route render={() => <Error type="404"> La page n'existe pas </Error>}/>
                    </Switch>
                    <div className="minSite"></div>
                </div>
                <Footer />
           </>
        );
    }
}

export default Site;