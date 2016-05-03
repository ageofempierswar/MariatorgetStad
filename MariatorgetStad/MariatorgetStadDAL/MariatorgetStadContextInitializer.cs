using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.Entity;

namespace MariatorgetStadDAL
{
    class MariatorgetStadContextInitializer : DropCreateDatabaseAlways<MariatorgetStadContext>
    {
        public override void InitializeDatabase(MariatorgetStadContext context)
        {
            base.InitializeDatabase(context);
        }
    }
}
