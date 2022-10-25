import {Controller} from "@hotwired/stimulus";
import React from "react";
import MadeWithLove from "../components/MadeWithLove";

export default class extends Controller{
    connect() {
        import('react-dom').then((ReactDom)=>{
            ReactDom.default.render(
                <MadeWithLove/>,
                this.element
            )
        })
    }
}