using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace test_WCFService
{
    [ServiceContract(Namespace = "http://test/WCFService")]
    public interface IService1
    {

        [OperationContract]
        int order(order order);

        [OperationContract]
        int offer(offer offer);
    }

    [DataContract]
    public class order
    {
        [DataMember]
        public string orderClassMember;
    }

    [DataContract]
    public class offer : order
    {
        [DataMember]
        public string offerClassMember;
    }
}
