const nodemailer = require('nodemailer');

exports.handler = async (event, context) => {
  if (event.httpMethod !== 'POST') {
    return { statusCode: 405, body: 'Method Not Allowed' };
  }

  const data = JSON.parse(event.body);

  let transporter = nodemailer.createTransport({
    service: 'gmail',  // Use Gmail service
    auth: {
      user: 'safety@safpro.in',  // Your Gmail
      pass: 'skyisthelimit!'      
    }
  });

  let mailOptions = {
    from: 'safety@safpro.in',
    to: 'safety@safpro.in',
    subject: 'New Contact Form',
    html: `
      <h2>New Contact</h2>
      <p><strong>Name:</strong> ${data.customer_name}</p>
      <p><strong>Email:</strong> ${data.customer_email}</p>
      <p><strong>WhatsApp:</strong> ${data.whatsapp_number}</p>
      <p><strong>Message:</strong> ${data.message}</p>
    `
  };

  try {
    await transporter.sendMail(mailOptions);
    return { statusCode: 200, body: JSON.stringify({ success: true }) };
  } catch (error) {
    return { statusCode: 500, body: JSON.stringify({ error: error.message }) };
  }
};