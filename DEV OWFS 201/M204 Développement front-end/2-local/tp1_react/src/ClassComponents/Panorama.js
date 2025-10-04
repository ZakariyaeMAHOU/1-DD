import React, { Component } from "react";

export default class Panorama extends React.Component {
    constructor() {
        super()
        this.state = {index:1}
    }
    suivant() {
        let i = this.state.index;
        i= i<4? i+1 : 1;
        this.setState({index: i})
    }
    precedent() {
        let i = this.state.index;
        i= i>1? i-1 : 4;
        this.setState({index: i})
    }
    render() {
        return (
            <div>
                <h1>Panorama</h1>
                <img src={`./images/car${this.state.index}.jpg`}
                    className="img-thumbnail w-50"
                />
                <br/>
                <button
                    onClick={() => this.precedent()}
                    className="btn btn-success"
                >
                    Precedent
                </button>
                <button
                    onClick={() => this.suivant()}
                    className="btn btn-success"
                >
                    Suivant
                </button>
            </div>
        )    
    }
}
