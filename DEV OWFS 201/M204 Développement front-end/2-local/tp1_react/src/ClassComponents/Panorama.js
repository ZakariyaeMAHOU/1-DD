import React, { Component } from "react";

export default class Panorama extends React.Component {
    constructor(props) {
        super(props)
    }
    render() {
        return (
            <div id="c1" className="carousel slide" data-bs-ride="carousel" style="margin: 30px auto; width: 80%; height: 80%;">

                <div className="carousel-inner">
                    <div className="carousel-item active">
                        <img className="d-block w-100" src={`images/${this.props.produit.thumbnail}`} style="height: 300px;">
                            <div className="carousel-caption">
                                <h5 style="background-color: rgb(255 0 0 /50%);">Camp Nou</h5>
                            </div>
                    </div>
                    <div className="carousel-item">
                        <img className="d-block w-100" src={`images/${this.props.produit.thumbnail}`} style="height: 300px;">
                            <div className="carousel-caption">
                                <h5 style="background-color: rgb(255 0 0 /50%);">Anfield</h5>
                            </div>
                    </div>
                    <div className="carousel-item">
                        <img className="d-block w-100" src={`images/${this.props.produit.thumbnail}`} style="height: 300px;">
                            <div className="carousel-caption">
                                <h5 style="background-color: rgb(155 80 80 /50%);">Allianz arena</h5>
                            </div>
                    </div>
                </div>

                <div className="carousel-indicators">
                    <button type="button" data-bs-target="#c1" data-bs-slide-to="0" className="active"></button>
                    <button type="button" data-bs-target="#c1" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#c1" data-bs-slide-to="2"></button>
                </div>

                <button className="carousel-control-prev" type="button" data-bs-target="#c1" data-bs-slide="prev">
                    <span className="carousel-control-prev-icon"></span>
                    <span className="visually-hidden"></span>
                </button>
                <button className="carousel-control-next" type="button" data-bs-target="#c1" data-bs-slide="next">
                    <span className="carousel-control-next-icon"></span>
                    <span className="visually-hidden"></span>
                </button>

            </div>
        )
    }
}
