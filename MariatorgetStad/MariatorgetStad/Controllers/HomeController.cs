using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Mail;
using System.Threading.Tasks;
using System.Web;
using System.Web.Mvc;
using MariatorgetStadDAL;
using MariatorgetStad.Models;
using System.Net;

namespace MariatorgetStad.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your Contact page.";

            return View();
        }

        public ActionResult Service()
        {
            ViewBag.Message = "Your Service page.";

            return View();
        }

        [ValidateAntiForgeryToken]
        [HttpPost]
        public async Task<ActionResult> Contact(Models.Contact model)
        {
            if (ModelState.IsValid)
            {
                var email = "linusekdahl@gmail.com";

                var body = "<p>Email From: {0} (Subject: {1})</p><p>Message:</p><p>{2}</p>";
                var message = new MailMessage();
                message.To.Add(new MailAddress(email));
                message.Subject = model.Subject;
                message.From = new MailAddress(model.EmailAdress);
                message.Body = string.Format(body, model.EmailAdress, model.Subject, model.Message);
                message.IsBodyHtml = true;

                using (var client = new SmtpClient())
                {
                    client.Host = "send.one.com";
                    client.Port = 465;
                    client.EnableSsl = false;
                    client.Credentials = new NetworkCredential("contact@mariatorgetstad.se", "123456789");
              

                    await client.SendMailAsync(message);
                    return RedirectToAction("Index");
                }               
            }
            return View();
        }

        public ActionResult Sent()
        {
            return View();
        }
    }
}