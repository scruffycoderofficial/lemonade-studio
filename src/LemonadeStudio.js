import { render } from 'enzyme';
import React, { Component } from 'react'

class LemonadeStudio extends Component {

    render(){
        return (
            <div id="wrapper">
                <div id="container">
                    <div className="ui container">
                        <div className="ui secondary menu">
                            <div className="header item"><i className="counterclockwise rotated green large lemon icon"></i>Lemonade Studio</div>
                            <a className="active item">Home</a>
                            <a className="item">Messages</a>
                            <a className="item">Profile</a>
                            <div className="right menu">
                            <div className="item">
                                <div className="ui icon input">
                                    <input type="text" placeholder="Search..." />
                                    <i className="brown search link icon"></i>
                                </div>
                            </div>
                            <a className="ui item"><i className="brown large lock icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }

};

export default LemonadeStudio;