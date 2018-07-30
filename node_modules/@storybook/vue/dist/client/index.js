'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _preview = require('./preview');

Object.defineProperty(exports, 'storiesOf', {
  enumerable: true,
  get: function get() {
    return _preview.storiesOf;
  }
});
Object.defineProperty(exports, 'setAddon', {
  enumerable: true,
  get: function get() {
    return _preview.setAddon;
  }
});
Object.defineProperty(exports, 'addDecorator', {
  enumerable: true,
  get: function get() {
    return _preview.addDecorator;
  }
});
Object.defineProperty(exports, 'configure', {
  enumerable: true,
  get: function get() {
    return _preview.configure;
  }
});
Object.defineProperty(exports, 'getStorybook', {
  enumerable: true,
  get: function get() {
    return _preview.getStorybook;
  }
});