import React, { Component } from 'react'

class Contacts extends Component
{
    onSubmit = () => {
        this.props.history.push('/')
    }

    render(){
        return (
            <div  className="ui grid">
                <form className="ui form">
                    <div className="field">
                        <input placeholder="name" type="name" />
                    </div>
                    <div className="field">
                        <input placeholder="email" type="email" />
                    </div>
                    <div className="ui clearing divider"></div>
                    <button className="ui inverted orange button" onClick={this.onSubmit}>Submit</button>
                </form>
            </div>
        )
    }
}

export default Contacts