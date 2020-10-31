const { shallow } = require("enzyme")
const { default: LemonadeStudio } = require("./LemonadeStudio")
import React from 'react';
import ReactDOM from 'react-dom';

require('chai/register-expect')

require('./../app/config')

it("renders without crashing", () => {
    shallow(<LemonadeStudio/>)
})

it("renders ClassNameHeader Component on the page", () => {
    const wrapper = shallow(<LemonadeStudio/>)

    const classNameHeader = <div className="header">Project A</div>

    expect(wrapper.contains(classNameHeader)).equal(true)
})