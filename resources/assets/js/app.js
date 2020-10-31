import React, { Component } from 'react'

class App extends Component
{
  render() {
    return (
      <div className="ui items">
        <div className="item">
          <div className="ui small image">
            <img src="/images/avatar.jpg" />
          </div>
          <div className="content">
            <div className="header">Project A</div>
            <div className="meta">
              <span className="price"><i className="red large suitcase icon"></i>$1200</span>
              <span className="stay"><i className="yellow large clock icon"></i>1 Month</span>
            </div>
            <div className="description">
              <p>
                Project A is a very light-weight Client-Broker Design and Implementation.... blha! Blah! Blah!
              </p>
            </div>
          </div>
        </div>
        <div className="item">
          <div className="ui small image">
            <img src="/images/avatar.jpg" />
          </div>
          <div className="content">
            <div className="header">Project B</div>
            <div className="meta">
              <span className="price"><i className="green large suitcase icon"></i>$1200</span>
              <span className="stay"><i className="green large clock icon"></i>1 Month</span>
            </div>
            <div className="description">
            <p>
                Project A is a very light-weight Client-Broker Design and Implementation.... blha! Blah! Blah!
              </p>
            </div>
          </div>
        </div>
        <div className="item">
          <div className="ui small image">
            <img src="/images/avatar.jpg" />
          </div>
          <div className="content">
            <div className="header">Project C</div>
            <div className="meta">
              <span className="price"><i className="yellow large suitcase icon"></i>$1200</span>
              <span className="stay"><i className="red large clock icon"></i>1 Month</span>
            </div>
            <div className="description">
            <p>
                Project A is a very light-weight Client-Broker Design and Implementation.... blha! Blah! Blah!
              </p>
            </div>
          </div>
        </div>
      </div>
    )
  }
}
export default App