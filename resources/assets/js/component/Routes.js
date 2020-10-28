import React, { Component } from 'react';
import { Route, Switch } from 'react-router-dom';

import PageLayout from './app/Page/PageLayout';

import ProfileAccount from './profile/ProfileAccount';

class Routes extends Component{
    render() {
        return (
            <Switch>
                <Route exact path="/" component={PageLayout}></Route>
                <Route exact path="/profile" component={ProfileAccount}></Route>
            </Switch>
        );
    }
}

export default Routes;