using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MariatorgetStadDAL
{
    public static class Repository
    {
        public static void GetEmail()
        {
            using (var context = new MariatorgetStadContext())
            {
                //return
                //    (from u in context
                //     where u.AdminLevel == 1
                //     select u.Email).FirstOrDefault();
            }
        }
    }
}
