import React from 'react';
import ReactDOM from 'react-dom';
const { shallow } = require("enzyme")
const { default: LemonadeStudio } = require("./LemonadeStudio")

require('./../app/config')

require('chai/register-expect')

it("renders without crashing", () => {
    shallow(<LemonadeStudio/>)
})

it("renders ClassNameHeader Component on the page", () => {
    const wrapper = shallow(<LemonadeStudio/>)

    const classNameHeader = <div className="header item"><i className="counterclockwise rotated green large lemon icon"></i>Lemonade Studio</div>

    expect(wrapper.contains(classNameHeader)).equal(true)
})