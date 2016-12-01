import React, { PropTypes, Component} from 'React'

export default class LinkComponent extends Component {

  handleClick(e){
    e.preventDefault()
    this.props.onChangeSection(this.props.title)
  }

    render() {
      return (
        <li><a href="#" onClick={this.handleClick.bind(this)}>{this.props.title}</a></li>
    )}
}

LinkComponent.propTypes = {
  title: PropTypes.string.isRequired,
  onChangeSection: PropTypes.func.isRequired
}
