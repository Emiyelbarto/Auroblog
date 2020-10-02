export default function (req, res, next) {
  // req is the Node.js http request object
  console.log(req.url)

  // res is the Node.js http response object

  // next is a function to call to invoke the next middleware
  // Don't forget to call next at the end if your middleware is not an endpoint!
  next()
  if (req.path === '/redirect') {
    console.log('redirect!')
    res.redirect(301, 'https://browsehappy.com/')
  }
}
