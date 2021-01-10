define(['uiComponent'], function (Component) {
    'use strict';
    console.log("Hello World");
    return Component.extend({
        defaults: {
            tasks: [
                {label: "Task1"},
                {label: "Task2"},
                {label: "Task3"},
                {label: "Task4"}
                ]
        },
        initObservable: function () {
            this._super().observe(['tasks']);
            return this;
        }
    });
});
