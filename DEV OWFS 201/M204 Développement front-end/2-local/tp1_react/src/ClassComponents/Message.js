import React, { Component } from 'react'


export default class Message extends Component {
    constructor() {
        super()
        this.state = { message: 'Bienvenu ', btnMessgae: 'inscription' }
    }
    inscription() {
        this.setState({
            message: 'Bonsoir !!',
            btnMessgae: 'Merci'
        })
    }
    render() {
        return (
            <div>
                <h2>{this.state.message}</h2>
                <button
                    onClick={() => this.inscription()}
                >
                    {this.state.btnMessgae}
                </button>
            </div>
        )
    }
}
