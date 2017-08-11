 <?php
/**
 * This is an email class using the mail () function available in PHP.
 * @author dawid4157
 * @link blog.dawidciosek.pl
 * @version  1.0
 * @copyright GNU GENERAL PUBLIC LICENSE Version 3, 29 June 2007
 */
class EasyEmailer
{
    /**
     * Adress or name message sender
     * @var str $from
     */
    private $from;
    
    /**
     * The address of the person to whom e-mail will be sent
     * @var str $recipent
     */
    private $recipient;
    
    /**
     * The topic your e-mail
     * @var str $topic
     */
    private $topic;
    
    /**
     * The message content e-mail
     * @var str $content
     */
    private $content;
    
    /**
     * The headers for e-mails
     * @var str $headers
     */
    private $headers;
    
    /**
     * Message after code execution
     * @var str $message
     */
    private $message;
    
    /**
     * Add headers to e-mail message
     * @param array $headers
     * @return str $headers
     */
    public function addHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }
    
    /**
     * Get headers from e-mail message
     * @return $this->headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }
    
    /**
     * Set message sender
     * @param str $from
     * @return str $from
     */
    public function setFrom($from)
    {
        return $this->from = $from;
    }
    /**
     * Get message sender
     * @return $this->from
     */
    public function getFrom()
    {
        return $this->from;
    }
    
    /**
     * Set recipient
     * @param str $recipient - email address of the recipient
     * @return str $recipient
     */
    public function setRecipient($recipient)
    {
        return $this->recipient = $recipient;
    }
    
    /**
     * Get recipient
     * @return str $this->recipient
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
    
    /**
     * Set topic e-mail
     * @param str $topic - topic of the e-mail
     * @return str $topic
     */
    public function setTopic($topic)
    {
        return $this->topic = $topic;
    }
    
    /**
     * Get topic e-mail
     * @return str $this->topic
     */
    public function getTopic()
    {
        return $this->topic;
    }
    
    /**
     * Set content e-mail. Acceptable use of HTML tags.
     * @param str $content - content of the e-mail. 
     * @return str $content
     */
    public function setContent($content)
    {
        return $this->content = $content;
    }
    
    /**
     * Get content e-mail
     * @return str $this->content
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * Send your e-mail message. It's executable method.
     * @return boolean true, $this->message
     */
    public function sendEmail()
    {
        $headers = implode('', $this->headers);
        $send    = mail($this->recipient, $this->topic, $this->content, $headers);
        return true;
        $this->message;
    }
} 