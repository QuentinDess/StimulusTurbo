import {Controller} from "@hotwired/stimulus";

export default class extends Controller{
    selectedColorId = null;
    static targets = ['colorSquare','select'];
    connect() {
        // this.selectTarget.classList.add('d-none');
    }

    selectColor(event) {
        const clickedColorId = event.currentTarget.dataset.colorId;

        if(clickedColorId === this.selectedColorId ){
            event.currentTarget.classList.remove('selected');
            this.selectedColorId = null;
            this.selectTarget.value = '';
            return
        }
        this.selectedColorId = clickedColorId;
        this.colorSquareTargets.forEach((elt)=>{
            elt.classList.remove('selected')
        })
        console.log(this.selectedColorId);
        event.currentTarget.classList.add('selected');
        this.selectTarget.value = this.selectedColorId;
    }
}