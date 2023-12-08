**Terms:**

The developer was tasked with integrating an external CRM system and sending data to it. There is only one CRM at the moment, but there may be N in the future. The developer completed the task, the solution code is in this repository.

**Assignment:**

Review the code as thoroughly as possible. Make suggestions for improvements if necessary.

**Solution requirements:**

The solution must be in the form of a Google Docs link. 
Providing the solution in the correct form is one of the evaluation criteria.

**Review details:**

I refactored the code by using the Single-Responsibility Principle and Di approach, with this solution we can manage the senders, their configuration and clients, it will allow us to use multiple senders with different configurations and they can be tested separatelly.
About CRM managers, the same as the senders, we can add, modify, change the managers, add different senders to them without touching/affecting the rest of the code.
About the folder structure, maybe the senders can be moved into \App\Modules\CRM\Sender for better structure because they are related with the CRM.
Both, senders and CRM can be tested, we can extend an "Actions" (for example GetContactsAction, AddContactAction etc)