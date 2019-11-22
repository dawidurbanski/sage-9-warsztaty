export default name =>
  parseInt(
    getComputedStyle(document.documentElement)
      .getPropertyValue(name)
      .trim(),
    10
  );
