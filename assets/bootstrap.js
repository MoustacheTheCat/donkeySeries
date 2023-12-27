// import { startStimulusApp } from '@symfony/stimulus-bundle';

// const app = startStimulusApp();


// // Registers Stimulus controllers from controllers.json and in the controllers/ directory
// export const app = startStimulusApp(require.context(
//     '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
//     true,
//     /\.[jt]sx?$/
// ));
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    connect() {
        this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
}