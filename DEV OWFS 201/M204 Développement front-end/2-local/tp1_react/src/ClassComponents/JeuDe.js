import React, { Component } from 'react'

export default class JeuDe extends Component {
    constructor(props) {
        super(props)
        this.state = {
            face: null,
            compteur: null,
            face: false
        };
    }
    jouer() {
        const valeur = Math.floor(Math.random() * 6) + 1;
        this.setState({
            face: valeur,
            compteur: this.state.compteur + 1,
            fin: this.props.valeurCachee == valeur ? true : false
        });
    }

    initialiser() {
        this.setState({
            face: null,
            compteur: null,
            fin: false
        });
    }
    render() {
        return (
            <div>
                <img src='./images/jeuxDe.png' />
                <h1>JeuDe</h1>
                <p>Face : {this.state.face}</p>
                <p>Nombre d'essais : {this.state.compteur}</p>
                {
                    this.state.fin && <p>Bravo vous avez trouvé la face cachée !!</p>
                }
                {
                !this.state.fin && 
                    <button 
                        onClick={() => this.jouer()}
                    >
                        Jouer
                    </button>
                }
                {
                this.state.fin && 
                    <button 
                        onClick={() => this.initialiser()}
                    >
                        Initialiser
                    </button>
                }
            </div>
        )
    }
}
