import React from 'react'
import ReactDOM from 'react-dom'

import { Route, NavLink, BrowserRouter as Router, Switch } from 'react-router-dom'

import App from './app'
import Users from './users'
import Contacts from './contacts'
import NotFound from './notfound'

const routing = (
    <Router>
        <div>
        <ul>
        <li>
          <NavLink exect="true" activeClassName="active item" to="/">Dashboard</NavLink>
        </li>
        <li>
          <NavLink activeClassName="item" to="/users">Users</NavLink>
        </li>
        <li>
          <NavLink activeClassName="item" to="/contacts">Contacts</NavLink>
        </li>
      </ul>
      <Switch>
            <Route exact path="/" component={App} />
            <Route exect path="/users" component={Users} />
            <Route path="/contacts" component={Contacts} />
            <Route component={NotFound}/>
      </Switch>
        </div>
    </Router>
)

ReactDOM.render(routing, document.getElementById('root'))