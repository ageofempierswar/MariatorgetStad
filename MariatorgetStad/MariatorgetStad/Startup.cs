using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(MariatorgetStad.Startup))]
namespace MariatorgetStad
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
