using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Web;

namespace MariatorgetStad.Models
    
{
    public class Contact
    {
        [Required(ErrorMessage = "Email får inte lov att vara tom")]
        [EmailAddress(ErrorMessage = "Fel Adress, prova igen (example@gmail.com)")]
        [DisplayName("Din Email")]
        public string EmailAdress { get; set; }

        [Required(ErrorMessage = "Ämne får inte lov att vara tom")]
        [DisplayName("Ämne")]
         public string Subject { get; set; }

        [MaxLength(1000)]
        [DataType(DataType.MultilineText)]
        public string Message { get; set; }

        [DisplayName("Städning")]
        public bool Cleaning { get; set; }
        [DisplayName("Underhåll")]
        public bool Maintenance { get; set; }
        [DisplayName("Service")]
        public bool Service { get; set; }

        //[Required(ErrorMessage = "Invalid Captcha")]
        //public string ValidationNumber { get; set; }

        //public HttpPostedFileBase Upload { get; set; }
    }
}
