function confirmAction(link) {
  const result = confirm("Are you sure you want to perform this action?");
  if (result) {
    window.location.href = link;
  }
}
