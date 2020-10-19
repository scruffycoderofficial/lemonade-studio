import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class ExampleComponent extends Component
{
    render(){
        return (
            <div class="SongArtistFeature">
                <p>World is on fire</p>
                <p>Sarah McLachlan</p>
            </div>
        );
    }
}

export default ExampleComponent;

if (document.getElementById('example-component')) {
    ReactDOM.render(<ExampleComponent />, document.getElementById('example-component'));
}