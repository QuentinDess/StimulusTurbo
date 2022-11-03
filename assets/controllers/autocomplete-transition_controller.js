import { Controller } from '@hotwired/stimulus';
import { addFadeTransition } from '../util/add-transition';
import { Autocomplete } from 'stimulus-autocomplete';

export default class extends Autocomplete {
    static targets = ['results'];

    areResultsShown = false;

    connect() {
        addFadeTransition(this, this.resultsTarget);
        super.connect();
    }

    set resultsShown(value) {
        this.areResultsShown = value;
    }

    get resultsShown() {
        return this.areResultsShown
    }

    open() {
        super.open();
        this.enter();
    }
    close() {
        super.close();
        this.leave();
    }
}