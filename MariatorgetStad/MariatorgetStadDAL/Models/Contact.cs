﻿using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Web;

namespace MariatorgetStadDAL.Models
    
{
    public class Contact
    {

        public int ID { get; set; }

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

        [Required(ErrorMessage = "Invalid Captcha")]
        public string ValidationNumber { get; set; }

        public HttpPostedFileBase Upload { get; set; }
    }
}
