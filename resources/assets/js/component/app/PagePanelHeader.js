import React, { Component } from 'react';

export default class PagePanelHeader extends Component{
    render(){
        return (
            <div class="page-panel-header">
                <h2 class="ui header">
                    <i class="brown settings icon"></i>
                    <div class="content" style="font-size: 15px;">
                        {this.props.title}
                        <div class="sub header" style="font-size: 12px;color: #a2693d;font-weight:200;">
                        {this.props.subTitle}
                        </div>
                    </div>
                </h2>
            </div>
        );
    }
}