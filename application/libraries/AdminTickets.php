<?php

use App\Ticket;
use App\TicketReplies;

class AdminTickets extends MLibraryHelper
{
    /**
     * List all tickets.
     */
    protected function listTickets()
    {
        $tickets = Ticket::with('user', 'vendor')->orderBy('ticket_id', 'desc')->get();

        $this->loadTicketList(compact('tickets'));
    }

    /**
     * List new tickets.
     */
    protected function listNewTickets()
    {
        $tickets = Ticket::with('user')->whereNew(1)->orderBy('ticket_id', 'desc')->get();

        $this->loadTicketList(compact('tickets'));
    }

    /**
     * List pending tickets.
     */
    protected function listPendingTickets()
    {
        $this->getTicketsWhere(3);
    }

    /**
     * List closed tickets.
     */
    protected function listClosedTickets()
    {
        $this->getTicketsWhere(1);
    }

    /**
     * List on hold tickets.
     */
    protected function listOnHoldTickets()
    {
        $this->getTicketsWhere(2);
    }

    /**
     * View specific ticket by given id.
     *
     * @param $id integer
     */
    protected function viewTicket($id)
    {
        $ticket = Ticket::find($id)->with('replies.user', 'replies.vendor', 'replies.admin')->first();

        $this->loadPage(compact('ticket'), 'ticket_view');
    }

    /**
     * Load edit view for specific ticket by given id.
     *
     * @param $id integer
     */
    protected function editTicket($id)
    {
        $ticket = Ticket::find($id);

        $this->loadPage(compact('ticket'), 'ticket_edit');
    }

    /**
     * Update specific ticket by given id.
     *
     * @param $id integer
     */
    protected function updateTicket($id)
    {
        $this->validate();

        Ticket::find($id)->update([
            'priority' => $this->ci->input->post('priority'),
            'status' => $this->ci->input->post('status')
        ]);
    }

    /**
     * Delete specific ticket by given id.
     *
     * @param $id integer
     */
    protected function deleteTicket($id)
    {
        Ticket::find($id)->delete();
    }

    /**
     * Add new reply to ticket by the given ticket id.
     *
     * @param $id integer
     */
    protected function replyTicket($id)
    {
        $this->validate();

        $filename = $this->uploadTicketReplyFile($id);

        $this->updateTicketTableWhenTicketReplied($id);

        $this->addTicketReply($id, $filename);
    }

    /**
     * Update ticket_replies as necessary when new ticket reply added.
     *
     * @param $id integer
     */
    protected function updateTicketTableWhenTicketReplied($id)
    {
        Ticket::find($id)->update([
            'new' => 0,
            'replied' => 1,
            'priority' => $this->ci->input->post('priority'),
            'status' => $this->ci->input->post('status')
        ]);
    }

    /**
     * Add new ticket reply.
     *
     * @param $id integer
     * @param $filename string
     */
    protected function addTicketReply($id, $filename)
    {
        $user_title = $this->ci->session->userdata('title');

        $data = [
            'ticket_id' => $id,
            'message' => $this->ci->input->post('message'),
            'replied_by' => $user_title,
            'filename' => $filename,
            'created_at' => date('Y-m-d H:i:s')
        ];

        switch ($user_title) {
            case 'user':
                $data['user_id'] = $this->ci->session->userdata('user_id');
                break;
            case 'vendor':
                $data['vendor_id'] = $this->ci->session->userdata('vendor_id');
                break;
            case 'admin':
                $data['admin_id'] = $this->ci->session->userdata('admin_id');
                break;
        }

        TicketReplies::create($data);
    }

    /**
     * Upload reply ticket attachment,
     *
     * @param $id
     * @return string|null
     */
    protected function uploadTicketReplyFile($id)
    {
        $path = "./uploads/tickets/{$id}";

        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png|zip|pdf';
        $config['max_size'] = 5120;

        $this->ci->load->library('upload', $config);

        $this->ci->upload->do_upload('reply_file');

        $filename = $this->ci->upload->data()['file_name'];

        return $filename ? "{$path}/{$filename}" : null;
    }

    /**
     * Load ticket list view
     *
     * @param $page_data array
     */
    protected function loadTicketList($page_data)
    {
        $this->loadPage($page_data, 'ticket_list');
    }

    /**
     * Get tickets by given where case
     *
     * @param $case integer
     */
    protected function getTicketsWhere($case)
    {
        $tickets = Ticket::with('user')->where(function ($query) use($case) {
            $case == 3 ? $query->whereIn('status', [3, 4, 5]) : $query->whereStatus($case);
        })->orderBy('ticket_id', 'desc')->get();

        $this->loadTicketList(compact('tickets'));
    }

    /**
     * Validation for updating ticket.
     */
    protected function validate()
    {
        $this->ci->load->library('form_validation');

        if ($this->action == 'reply') {
            $this->ci->form_validation->set_rules('message', 'Message', 'required|string');
        }

        $this->ci->form_validation->set_rules('priority', 'Priority', 'required|integer');

        if (!$this->ci->form_validation->run()) {
            $this->callListMethod();
        }
    }

    /**
     * Determine the listing tickets type.
     *
     * @return string
     */
    protected function determineTicketType()
    {
        switch ($this->pageUrl) {
            case 'tickets':
                $ticket_type = 'All Tickets';
                break;
            case 'new_tickets':
                $ticket_type = 'Tickets that are new';
                break;
            case 'closed_tickets':
                $ticket_type = 'Tickets that have been solved';
                break;
            case 'on_hold_tickets':
                $ticket_type = 'Tickets that are on hold';
                break;
            case 'pending_tickets':
                $ticket_type = 'Tickets that are pending';
        }

        return $ticket_type;
    }

    /**
     * Get data for loading a page.
     *
     * @return array
     */
    protected function getPageData()
    {
        return [
            'page_name' => 'ticket',
            'ticket_type' => $this->determineTicketType()
        ];
    }

    /**
     * Get action method's suffix.
     *
     * @return string
     */
    protected function getMethodSuffix()
    {
        return 'Ticket';
    }
}
