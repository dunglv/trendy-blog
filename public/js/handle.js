function slug(str = '') {
	str = str.toLowerCase();
	str = str.replace(/\s+/g, '-');
	str = str.replace(/\-+/g, '-');
	str = str.replace(/[^a-z0-9-.]+/g, '');
	return str;
}