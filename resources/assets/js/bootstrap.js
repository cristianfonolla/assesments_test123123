<<<<<<< HEAD
/* global _ Vue */

window._ = require('lodash')
=======

window._ = require('lodash');
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

<<<<<<< HEAD
window.$ = window.jQuery = require('jquery')

require('bootstrap-less')

require('admin-lte')
window.toastr = require('toastr')
require('icheck')
=======
window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

require('admin-lte');
window.toastr = require('toastr');
require('icheck');
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

<<<<<<< HEAD
window.Vue = require('vue')

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios')

window.axios.defaults.headers.common = {
  'X-CSRF-TOKEN': window.Laravel.csrfToken,
  'X-Requested-With': 'XMLHttpRequest'
}

// Use trans function in Vue (equivalent to trans() Laravel Translations helper). See htmlheader.balde.php partial.
Vue.prototype.trans = (key) => {
  return _.get(window.trans, key, key)
}

// Laravel AdminLTE vue components
Vue.component('register-form', require('./components/auth/RegisterForm.vue'))
Vue.component('login-form', require('./components/auth/LoginForm.vue'))
Vue.component('email-reset-password-form', require('./components/auth/EmailResetPasswordForm.vue'))
Vue.component('reset-password-form', require('./components/auth/ResetPasswordForm.vue'))
=======
window.Vue = require('vue');
require('vue-resource');

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

Vue.http.interceptors.push((request, next) => {
    request.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;

    next();
});
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

<<<<<<< HEAD
// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');
=======
// import Echo from "laravel-echo"
>>>>>>> aa3e909b7565fbbbf472e753bcc6fdb6e08b2c08

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
