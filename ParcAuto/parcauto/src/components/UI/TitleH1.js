import React from "react"; 

const titreH1 = (props) => {
    let backgroundColor = props.bgColor ? props.bgColor : "bg-primary";
    let cssStyle = `border border-dark p-2 text-white text-center rounded ${backgroundColor}`;
    return <h1 className={cssStyle}> {props.children}</h1>
}; 

export default titreH1;