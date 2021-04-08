import React from "react"; 
import TitleH1 from "./TitleH1";

const Error = (props) => {
    return (
        <>
            <TitleH1 bgColor="bg-danger">Erreur {props.type}</TitleH1>
            <div>
                {props.children}
            </div>
        </>
    )
}; 

export default Error;