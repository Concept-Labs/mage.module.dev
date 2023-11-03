alert('mtr ko');
define(['jquery', 'uiComponent', 'ko'], function ($, Component, ko) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'Mtr_Dev/knockout/test-div-text'
        },
        initialize: function () {
            this._super();
        }
    });
}
);