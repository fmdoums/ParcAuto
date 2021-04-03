import React, { Component } from "react";
import Navbar from "./../../components/UI/NavBar";
import {Switch, Route} from "react-router-dom";
import Acceuil from "./Accueil";
import Contact from "./Contact";
import Erreur from "../../components/UI/Erreur"

class Site extends Component {
    render() {
        return (
           <>
                <Navbar />
                <Switch>
                    <Route path="/contact" exact render={() => <Contact />} />
                    <Route path="/" exact render={() => <Acceuil />} />    
                    <Route render={() => <Erreur type="404"> La page n'existe pas </Erreur>}/>
                </Switch>
           </>
        );
    }
}

export default Site;