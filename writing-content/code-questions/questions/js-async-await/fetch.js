async function getUser(id) {
  const response = ___ fetch(`/api/users/${id}`)
  if (!response.___) {
    throw new Error('Failed to fetch')
  }
  return ___ response.json()
}
