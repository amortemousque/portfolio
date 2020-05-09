window.com.greensock.core.Animation.prototype.promise = function () {
	_this = this;
	return new Promise(function(resolve) {
		const existing = _this.eventCallback('onComplete');
		_this.eventCallback('onComplete', function () {
			if (existing) {
				existing.apply(this, arguments);
			}
			resolve();
		});
        _this.restart();
	});
};