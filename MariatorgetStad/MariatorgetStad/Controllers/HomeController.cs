using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Mail;
using System.Threading.Tasks;
using System.Web;
using System.Web.Mvc;
using MariatorgetStadDAL;
using MariatorgetStadDAL.Models;

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
        public async Task<ActionResult> Contact(Contact model)
        {
            if (ModelState.IsValid)
            {
                var email = ""; /*Repository.GetEmail();*/
                var body = "<p>Email From: {0} (Subject: {1})</p><p>Message:</p><p>{2}</p>";
                var message = new MailMessage();
                message.To.Add(new MailAddress(email));
                message.Subject = model.Subject;
                message.Body = string.Format(body, model.EmailAdress, model.Subject, model.Message);
                message.IsBodyHtml = true;

                if (model.ValidationNumber == "gHft3")
                {
                    using (var smtp = new SmtpClient())
                    {
                        await smtp.SendMailAsync(message);
                        return RedirectToAction("Sent");
                    }
                }
                else
                {
                    ViewBag.WrongAnswer = "Wrong answer. Please try again and this time make sure you've spelled it right.";
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