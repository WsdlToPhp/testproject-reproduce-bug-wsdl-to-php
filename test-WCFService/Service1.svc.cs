using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace test_WCFService
{
    public class Service1 : IService1
    {
        public int order(order order) {
            return 0;
        }

        public int offer(offer offer) {
            return 0;
        }
    }
}
