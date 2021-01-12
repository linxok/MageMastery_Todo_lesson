define([
    'uiComponent',
    'jquery'
    ], function (Component, $) {
    'use strict';
    console.log("Hello World");
    return Component.extend({
        defaults: {
            tasks: [
                {id: 1, label: "Task1", status: false},
                {id: 2, label: "Task2", status: false},
                {id: 3, label: "Task3", status: false},
                {id: 4, label: "Task4", status: true}
                ]
        },
        initObservable: function () {
            this._super().observe(['tasks']);
            return this;
        },
        switchStatus: function (data, event) {
            const taskId = $(event.target).data('id');
            let items = this.tasks().map(function (task) {
               if (task.id === taskId){
                   task.status = !task.status;
               }
               return task;
            });

            this.tasks(items);
        },
        deleteTask: function (taskId) {
            if (this.tasks().length === 1){
                return;
            }
            let tasks = [];
            this.tasks().forEach(function (task) {
                if (task.id !== taskId){
                    tasks.push(task);
                }
            });
            this.tasks(tasks);
        },
    });
});
