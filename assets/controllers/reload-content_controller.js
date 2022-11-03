import {Controller} from "@hotwired/stimulus";
import $ from 'jquery';

export default class extends Controller {
    static values = {
        url: String
    }
    static targets = ['content'];
    connect() {
        console.log(this.urlValue);
    }

    async refreshContent(event) {
        console.log(this.urlValue);
        const target = this.hasContentTarget ? this.contentTarget : this.element
        target.style.opacity = .5;
        target.innerHTML = await $.ajax(this.urlValue);
        target.style.opacity = 1;

    }

}